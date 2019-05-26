#############

Use_Rotation = True

#############

from pyfbsdk import *
import CharacterSelectAndKey

# Get the controller
def GetController():
    MList = FBModelList()
    FBGetSelectedModels(MList)
    return MList[0]

# Get the position and rotation of the controller
def GetPosition(FootCTRL):
    global Use_Rotation
    CurrentFrame = FBPlayerControl().GetEditCurrentTime()
    PreviousFrame = FBTime(0,0,0,int(CurrentFrame.GetFrame()-1))
    FBPlayerControl().Goto(PreviousFrame)
    Tx, Ty, Tz = FootCTRL.Translation
    Rx, Ry, Rz = FootCTRL.Rotation
    CharacterSelectAndKey.keying_mode_mappings["Body Part"]()
    FBPlayerControl().Goto(CurrentFrame)
    FootCTRL.Translation = FBVector3d(Tx, Ty, Tz)
    if Use_Rotation:
        FootCTRL.Rotation = FBVector3d(Rx, Ry, Rz)
    CharacterSelectAndKey.keying_mode_mappings["Body Part"]()
    


def main():
    FootCTRL = GetController()
    GetPosition(FootCTRL)
	
main()

